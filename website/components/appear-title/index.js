import cn from 'clsx'
import { useEffect, useState } from 'react'
import TextAnimation from 'react-text-animation'
import s from './appear-title.module.scss'

export function AppearTitle({ children, visible = true }) {
  const [intersected, setIntersected] = useState(false)

  useEffect(() => {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          setIntersected(true)
        }
      })
    })

    observer.observe(document.getElementById("appear-title"))
  }, [])

  return (
    <div
      id="appear-title"
      className={cn(s.title, intersected && visible && s.visible)}
    >
      <TextAnimation>
        {children}
      </TextAnimation>
    </div>
  )
}